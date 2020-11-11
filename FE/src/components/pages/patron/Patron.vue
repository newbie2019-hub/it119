<template>
  <div id="app">
    <SideBar isActive="patron" />
    <NavBar />
    <div class="main">
      <div class="container pt-4">
        <h6 class="text-muted">Here are your patrons</h6>
        <div class="row mt-2">
          <div class="col-11 col-sm-11 col-md-11 col-lg-11">
            <div class="row justify-content-end mr-1 mb-3">
              <button
                @click="$bvModal.show('addModal')"
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
                      <td>{{ patron.name }}</td>
                      <td>{{ patron.email }}</td>
                      <td>{{ patron.date }}</td>
                      <td>
                        <img
                          src="../../assets/images/edit.png"
                          class="mr-2"
                          height="25"
                        /><a
                          type="button"
                          data-toggle="modal"
                          data-target="#deleteModal"
                          @click="$bvModal.show('deleteModal')"
                          ><img
                            src="../../assets/images/delete.png"
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
    </div>

    <b-modal id="addModal" centered title="Add Patron">
      <form class="pl-5 pr-5">
        <div class="form-group">
          <label for="exampleFormControlInput1">First Name</label>
          <input
            type="email"
            class="form-control"
            id="exampleFormControlInput1"
            placeholder=""
          />
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Middle Name</label>
          <input
            type="email"
            class="form-control"
            id="exampleFormControlInput1"
            placeholder=""
          />
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Last Name</label>
          <input
            type="email"
            class="form-control"
            id="exampleFormControlInput1"
            placeholder=""
          />
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input
            type="email"
            class="form-control"
            id="exampleFormControlInput1"
            placeholder=""
          />
        </div>
      </form>
      <template #modal-footer="{ ok }">
        <b-button size="sm" variant="primary" @click="ok()">
          Add Patron
        </b-button>
      </template>
    </b-modal>

    <b-modal id="deleteModal" centered title="Confirm Delete">
      <p class="my-4">Are you sure you want to delete this patron?</p>
      <template #modal-footer="{ ok, cancel }">
        <b-button variant="info" @click="cancel()"> Cancel </b-button>
        <b-button variant="danger" @click="ok()"> Confirm </b-button>
      </template>
    </b-modal>
  </div>
</template>

<script>
import SideBar from "../../navigation/SideBar";
import NavBar from "../../navigation/NavBar";

export default {
  mounted(){
    document.title = "Patron Management"
  },
  components: { SideBar, NavBar },
  methods: {},
  data() {
    return {
      patrons: [
        {
          name: "Rizal, Jose",
          email: "joserizal@gmail.com",
          date: "Oct 20, 2020",
        },
        {
          name: "Doe, John",
          email: "johndoe@gmail.com",
          date: "Oct 20, 2020",
        },
        {
          name: "Sabay, Yvan",
          email: "yvansabay@gmail.com",
          date: "Oct 20, 2020",
        },
        {
          name: "Durante, Derick",
          email: "derickdurante@gmail.com",
          date: "Oct 20, 2020",
        },
        {
          name: "Bucatcat, Cirilo",
          email: "cirilobucatcat@gmail.com",
          date: "Oct 20, 2020",
        },
      ],
    };
  },
};
</script>

<style>
@import "../../../assets/css/style.css";
</style>
