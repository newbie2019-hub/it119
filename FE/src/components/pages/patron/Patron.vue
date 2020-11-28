<template>
  <div id="app">
    <div class="container pt-4">
      <h6 class="text-muted">Here are your patrons</h6>
      <div class="row mt-2">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11">
          <div class="row justify-content-end mr-1 mb-3">
            <button
              @click="showAddModal"
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
                        patron.firstname +
                        " " +
                        patron.middlename +
                        " " +
                        patron.lastname
                      }}
                    </td>
                    <td>{{ patron.email }}</td>
                    <td>{{ patron.date }}</td>
                    <td>
                      <a
                        type="button"
                        data-toggle="modal"
                        data-target="#deleteModal"
                        @click="showEditModal(patron, i)"
                      >
                        <img
                          src="@/assets/images/edit.png"
                          class="mr-2"
                          height="25" /></a
                      ><a
                        type="button"
                        data-toggle="modal"
                        data-target="#deleteModal"
                        @click="showDeleteModal(i)"
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
            v-model="input.firstname"
          />
        </div>
        <div class="form-group">
          <label for="AddPatronMiddleName">Middle Name</label>
          <input
            type="text"
            class="form-control"
            id="AddPatronMiddleName"
            placeholder=""
            v-model="input.middlename"
          />
        </div>
        <div class="form-group">
          <label for="AddPatronLastName">Last Name</label>
          <input
            type="text"
            class="form-control"
            id="AddPatronLastName"
            placeholder=""
            v-model="input.lastname"
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
            v-model="editPatron.firstname"
          />
        </div>
        <div class="form-group">
          <label for="EditPatronMiddleName">Middle Name</label>
          <input
            type="text"
            class="form-control"
            id="EditPatronMiddleName"
            placeholder=""
            v-model="editPatron.middlename"
          />
        </div>
        <div class="form-group">
          <label for="EditPatronLastName">Last Name</label>
          <input
            type="text"
            class="form-control"
            id="EditPatronLastName"
            placeholder=""
            v-model="editPatron.lastname"
          />
        </div>
        <div class="form-group">
          <label for="EditPatronEmail">Email address</label>
          <input
            type="text"
            class="form-control"
            id="EditPatronEmail"
            placeholder=""
            v-model="editPatron.email"
          />
        </div>
      </form>
      <template #modal-footer>
        <b-button size="sm" variant="primary" v-on:click="updatePatron">
          Update Patron
        </b-button>
      </template>
    </b-modal>

    <b-modal id="deleteModal" centered title="Confirm Delete">
      <p class="my-4">Are you sure you want to delete this patron?</p>
      <template #modal-footer="{ cancel }">
        <b-button variant="info" size="sm" @click="cancel()"> Cancel </b-button>
        <b-button
          variant="danger"
          size="sm"
          v-on:click.prevent="deletePatron()"
        >
          Confirm
        </b-button>
      </template>
    </b-modal>
  </div>
</template>

<script>
import {toast} from '@/assets/js/toast/vue-toast'
export default {
  mixins: [toast],
  mounted() {
    document.title = "Patron Management";
  },
  data() {
    return {
      patrons: [
        {
          firstname: "Cirilo",
          middlename: "E",
          lastname: "Bucatcat",
          email: "cirilobucatcat@gmail.com",
          date: new Date().toISOString().slice(0, 10),
        },
        {
          firstname: "Melbienri",
          middlename: "",
          lastname: "Gabitan",
          email: "melbienri@gmail.com",
          date: new Date().toISOString().slice(0, 10),
        },
        {
          firstname: "Yvan",
          middlename: "C",
          lastname: "Sabay",
          email: "sabayyvan2018@gmail.com",
          date: new Date().toISOString().slice(0, 10),
        },
        {
          firstname: "Derick Justin",
          middlename: "",
          lastname: "Durante",
          email: "derickdurante@gmail.com",
          date: new Date().toISOString().slice(0, 10),
        },
      ],
      editPatron: {},
      editIndex: "",
      input: {
        firstname: "",
        middlename: "",
        lastname: "",
        email: "",
        date: new Date().toISOString().slice(0, 10),
      },
      deleteIndex: "",
    };
  },
  methods: {
    showAddModal() {
      this.clearFields();
      this.$bvModal.show("addModal");
    },
    showDeleteModal(i) {
      this.deleteIndex = i;
      this.$bvModal.show("deleteModal");
    },
    showEditModal(p, i) {
      this.editIndex = i;
      this.editPatron = { ...this.patrons[i] };
      this.$bvModal.show("editModal");
    },
    deletePatron() {
      this.$delete(this.patrons, this.deleteIndex);
      this.$bvModal.hide("deleteModal");
    },
    savePatron() {
      if (this.input.firstname.trim() == "")
        return this.showErrorToast("First Name is required!");
      if (this.input.lastname.trim() == "")
        return this.showErrorToast("Last Name is required!");
      if (this.input.email.trim() == "")
        return this.showErrorToast("Email is required!");

      this.patrons.unshift({ ...this.input });
      this.clearFields();
      this.$bvModal.hide("addModal");
      this.showSuccessToast("Patron added successfully");
    },
    updatePatron() {
      if (this.editPatron.firstname.trim() == "")
        return this.showErrorToast("First Name is required!");
      if (this.editPatron.lastname.trim() == "")
        return this.showErrorToast("Last Name is required!");
      if (this.editPatron.email.trim() == "")
        return this.showErrorToast("Email is required!");

      this.$set(this.patrons, this.editIndex, this.editPatron);
      this.$bvModal.hide("editModal");
      this.showSuccessToast("Patron updated successfully");
    },
    clearFields() {
      this.input.firstname = "";
      this.input.middlename = "";
      this.input.lastname = "";
      this.input.email = "";
    },
    
  },
};
</script>
