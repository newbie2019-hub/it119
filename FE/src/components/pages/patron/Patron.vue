<template>
  <div id="app">
    <div class="container pt-4">
      <h6 class="text-muted">Here are your patrons</h6>
      <div class="row mt-2">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11">
          <div class="row justify-content-end mr-1 mb-3">
            <button
              v-on:click="$bvModal.show('addModal')"
              class="btn rounded-pill btn-outline-primary btn-sm"
            >
              Add Patron
            </button>
          </div>
          <div class="card p-4 card-shadow">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Date Registered</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(patron, i) in patrons" :key="i">
                    <td>
                      {{
                        patron.first_name +
                        " " +
                        patron.middle_name +
                        " " +
                        patron.last_name
                      }}
                    </td>
                    <td>{{ patron.email }}</td>
                    <td>{{ patron.created_at }}</td>
                    <td>
                      <a type="button" v-on:click="$bvModal.show('editModal'); index = i; input = {...patron}">
                        <img
                          src="@/assets/images/edit.png"
                          class="mr-2"
                          height="25" /></a>
                      <a
                        type="button"
                        v-on:click="$bvModal.show('deleteModal'); index = patron.id"
                        ><img
                          src="@/assets/images/delete.png"
                          class="mr-2"
                          height="16"
                      /></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <nav aria-label="Page navigation example" class="mt-3">
              <ul class="pagination pagination-sm justify-content-end">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Prev</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <!---ADD PATRON --->
    <b-modal id="addModal" centered title="Add Patron">
      <form class="pl-5 pr-5" ref="addPatronModal">
        <div class="form-group">
          <label for="AddPatronFirstName">First Name</label>
          <input
            type="email"
            class="form-control"
            id="AddPatronFirstName"
            placeholder=""
            v-model="input.first_name"
          />
        </div>
        <div class="form-group">
          <label for="AddPatronMiddleName">Middle Name</label>
          <input
            type="text"
            class="form-control"
            id="AddPatronMiddleName"
            placeholder=""
            v-model="input.middle_name"
          />
        </div>
        <div class="form-group">
          <label for="AddPatronLastName">Last Name</label>
          <input
            type="text"
            class="form-control"
            id="AddPatronLastName"
            placeholder=""
            v-model="input.last_name"
          />
        </div>
        <div class="form-group">
          <label for="AddPatronEmail">Email address</label>
          <input
            type="text"
            class="form-control"
            id="AddPatronEmail"
            placeholder=""
            v-model="input.email"
          />
        </div>
      </form>
      <template #modal-footer>
        <b-button size="sm" variant="primary" v-on:click="savePatron">
          Add Patron
        </b-button>
      </template>
    </b-modal>

    <!---EDIT PATRON --->
    <b-modal id="editModal" centered title="Edit Patron">
      <form class="pl-5 pr-5" ref="editPatronModal">
        <div class="form-group">
          <label for="EditPatronFirstName">First Name</label>
          <input
            type="email"
            class="form-control"
            id="EditPatronFirstName"
            placeholder=""
            v-model="input.first_name"
          />
        </div>
        <div class="form-group">
          <label for="EditPatronMiddleName">Middle Name</label>
          <input
            type="text"
            class="form-control"
            id="EditPatronMiddleName"
            placeholder=""
            v-model="input.middle_name"
          />
        </div>
        <div class="form-group">
          <label for="EditPatronLastName">Last Name</label>
          <input
            type="text"
            class="form-control"
            id="EditPatronLastName"
            placeholder=""
            v-model="input.last_name"
          />
        </div>
        <div class="form-group">
          <label for="EditPatronEmail">Email address</label>
          <input
            type="text"
            class="form-control"
            id="EditPatronEmail"
            placeholder=""
            v-model="input.email"
          />
        </div>
      </form>
      <template #modal-footer>
        <b-button size="sm" variant="primary" v-on:click="patronUpdate">
          Update Patron
        </b-button>
      </template>
    </b-modal>

    <b-modal id="deleteModal" centered title="Confirm Delete">
      <p class="my-4">Are you sure you want to delete this patron?</p>
      <template #modal-footer="{ cancel }">
        <b-button variant="info" size="sm" @click="cancel()"> Cancel </b-button>
        <b-button variant="danger" size="sm" v-on:click="patronDelete">
          Confirm
        </b-button>
      </template>
    </b-modal>
  </div>
</template>

<script>
import { mapState, mapActions, mapGetters } from 'vuex';
import {toast} from '@/assets/js/toast/vue-toast'
export default {
  mixins: [toast],
  mounted() {
    document.title = "Patron Management";
    this.$root.$on('bv::modal::hide', () => {
      this.clearFields();
    })
    this.getPatrons();
    this.getPatronData();
  },
  computed: {
    ...mapState('patrons', ['patrons'])
  },
  data() {
    return {
      input: {
        first_name: "",
        middle_name: "",
        last_name: "",
        email: "",
      },
      index: "",
    };
  },
  methods: {
    ...mapActions('patrons', ['getPatrons', 'storePatron', 'deletePatron', 'updatePatron']),
    ...mapGetters('patrons', ['getPatronData']),
    async savePatron() {
      const res = await this.storePatron(this.input)
      if(res.status == 200){
        this.$bvModal.hide('addModal');
        this.showSuccessToast('Patron saved successfully!')
      }
      else {
        this.showError(res.data)
      }
    },
    async patronDelete() {
      const res = await this.deletePatron(this.index)
      if(res.status == 200){
        this.$bvModal.hide('deleteModal')
      }
      else {
        this.showError(res.data)
      }
    },
    async patronUpdate(){
      const res = await this.updatePatron({data: {...this.input}, index: this.index})
      if(res.status == 200){
        this.$bvModal.hide('editModal')
         this.showSuccessToast('Patron updated successfully!')
      }
      else {
        this.showError(res.data)
      }
    },
    clearFields() {
      this.input.first_name = "";
      this.input.middle_name = "";
      this.input.last_name = "";
      this.input.email = "";
    },
    showError(data){
      for (const key of Object.keys(data)) {
        this.showErrorToast(data[key][0]); 
      }
    }
    
  },
};
</script>
