<template>
  <div id="app">
    <SideBar isActive="books" />
    <NavBar />
    <div class="main">
      <div class="container pt-4 mb-3">
        <h6 class="text-muted">Here are your books</h6>
        <div class="row mt-2">
          <div class="col-11 col-sm-11 col-md-11 col-lg-11">
            <div class="row justify-content-end mr-1 mb-3">
              <b-button
                variant="btn rounded-pill btn-outline-primary btn-sm"
                v-b-modal.addModal
              >
                Add Books
              </b-button>
            </div>
            <div class="card p-4 card-shadow">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Author</th>
                      <th scope="col">Copies <br />Available</th>
                      <th scope="col">Category</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(book, i) in books" :key="i">
                      <td>{{ book.name }}</td>
                      <td>{{ book.author }}</td>
                      <td>{{ book.copies }}</td>
                      <td>{{ book.category }}</td>
                      <td>
                        <img
                          src="@/assets/images/edit.png"
                          class="mr-2 cursor-pointer"
                          height="25"
                        /><a type="button" @click="$bvModal.show('deleteModal')"
                          ><img
                            src="@/assets/images/delete.png"
                            class="mr-2"
                            height="16" /></a
                        ><img
                          src="@/assets/images/borrow.png"
                          class="cursor-pointer mr-2"
                          height="20"
                        /><img
                          src="@/assets/images/return.png"
                          class="cursor-pointer"
                          height="20"
                        />
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

    <b-modal id="addModal" centered title="Add Book">
      <form class="pl-5 pr-5">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="email" class="form-control" id="name" placeholder="" />
        </div>
        <div class="form-group">
          <label for="author">Author</label>
          <input type="email" class="form-control" id="author" placeholder="" />
        </div>
        <div class="form-group">
          <label for="copies">Copies</label>
          <input type="email" class="form-control" id="copies" placeholder="" />
        </div>
        <div class="form-group">
          <label for="customSelect">Category</label>
          <select id="customSelect" name="cars" class="custom-select">
            <option selected>Please select a category</option>
            <option value="volvo">Fiction</option>
            <option value="fiat">Horror</option>
            <option value="audi">Novel</option>
            <option value="audi">Biography</option>
          </select>
        </div>
      </form>
      <template #modal-footer="{ ok }">
        <b-button size="sm" variant="primary" @click="ok()">
          Add Book
        </b-button>
      </template>
    </b-modal>

    <b-modal id="deleteModal" centered title="Confirm Delete">
      <p class="my-4">Are you sure you want to delete this book?</p>
      <template #modal-footer="{ ok, cancel }">
        <b-button variant="info" @click="cancel()"> Cancel </b-button>
        <b-button variant="danger" @click="ok()"> Confirm </b-button>
      </template>
    </b-modal>
  </div>
</template>
<script>
import SideBar from "@/components/navigation/SideBar";
import NavBar from "@/components/navigation/NavBar";

export default {
  
  name: "App",
  mounted(){
    document.title = "Books Management"
  },
  components: { SideBar, NavBar },
  methods: {},
  data() {
    return {
      books: [
        {
          name: "Data Structures",
          author: "Batman",
          copies: "15",
          category: "Computer Science",
        },
        {
          name: "Code Complete",
          author: "Steve",
          copies: "12",
          category: "Computer Science",
        },
        {
          name: "Java",
          author: "Hulk",
          copies: "17",
          category: "Computer Science",
        },
        {
          name: "Python",
          author: "Superman",
          copies: "16",
          category: "Computer Science",
        },
        {
          name: "C#",
          author: "Joker",
          copies: "12",
          category: "Computer Science",
        },
      ],
    };
  },
};
</script>
