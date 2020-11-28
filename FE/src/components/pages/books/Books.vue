<template>
  <div id="app">
      <div class="container pt-4 mb-3">
        <h6 class="text-muted">Here are your books</h6>
        <div class="row mt-2">
          <div class="col-11 col-sm-11 col-md-11 col-lg-11">
            <div class="row justify-content-end mr-1 mb-3">
              <b-button
                variant="btn rounded-pill btn-outline-primary btn-sm"
                v-on:click="showAddModal"
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
                        <a type="button" v-on:click="showEditModal(i)"
                          >
                        <img
                          src="@/assets/images/edit.png"
                          class="mr-2 cursor-pointer"
                          height="25"
                        /></a><a type="button" v-on:click="showDeleteModal(i)"
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

    <b-modal id="addModal" centered title="Add Book">
      <form class="pl-5 pr-5">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" v-model="input.name" class="form-control" id="name" placeholder="" />
        </div>
        <div class="form-group">
          <label for="author">Author</label>
          <input type="text" v-model="input.author" class="form-control" id="author" placeholder="" />
        </div>
        <div class="form-group">
          <label for="copies">Copies</label>
          <input v-model="input.copies" class="form-control" id="copies" placeholder="" type="number"/>
        </div>
        <div class="form-group">
          <label for="customSelect">Category</label>
          <select id="customSelect" v-model="input.category" name="cars" class="custom-select">
            <option selected disabled>Please select a category</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Fiction">Fiction</option>
            <option value="Horror">Horror</option>
            <option value="Novel">Novel</option>
            <option value="Biography">Biography</option>
          </select>
        </div>
      </form>
      <template #modal-footer>
        <b-button size="sm" variant="primary" v-on:click="saveBook">
          Add Book
        </b-button>
      </template>
    </b-modal>

    <!--- EDIT MODAL --->
    <b-modal id="editModal" centered title="Edit Book">
      <form class="pl-5 pr-5">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" v-model="editBook.name" class="form-control" id="name" placeholder="" />
        </div>
        <div class="form-group">
          <label for="author">Author</label>
          <input type="text" v-model="editBook.author" class="form-control" id="author" placeholder="" />
        </div>
        <div class="form-group">
          <label for="copies">Copies</label>
          <input v-model="editBook.copies" class="form-control" id="copies" placeholder="" type="number"/>
        </div>
        <div class="form-group">
          <label for="customSelect">Category</label>
          <select id="customSelect" v-model="editBook.category" name="cars" class="custom-select">
            <option selected disabled>Please select a category</option>
            <option value="Fiction">Fiction</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Horror">Horror</option>
            <option value="Novel">Novel</option>
            <option value="Biography">Biography</option>
          </select>
        </div>
      </form>
      <template #modal-footer = {cancel}>
        <b-button variant="primary" size="sm" @click="cancel()"> Cancel </b-button>
        <b-button size="sm" variant="success" v-on:click="updateBook">
          Update Book
        </b-button>
      </template>
    </b-modal>

    <b-modal id="deleteModal" centered title="Confirm Delete">
      <p class="my-4">Are you sure you want to delete this book?</p>
      <template #modal-footer="{ cancel }">
        <b-button variant="info" @click="cancel()"> Cancel </b-button>
        <b-button variant="danger" v-on:click="deleteBook"> Confirm </b-button>
      </template>
    </b-modal>
  </div>
</template>
<script>
import {toast} from '@/assets/js/toast/vue-toast'
export default {
  mixins: [toast],
  name: "App",
  mounted(){
    document.title = "Books Management"
  },
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
      ],
      editBook: {},
      input: {
        name: "",
        author: "",
        copies: 0,
        category: "",
      },
      deleteIndex: "",
      editIndex: '',
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
    showEditModal(i) {
      this.editIndex = i;
      this.editBook = ({...this.books[i]})
      this.$bvModal.show("editModal");
    },
    deleteBook() {
      this.$delete(this.books, this.deleteIndex);
      this.$bvModal.hide("deleteModal");
    },
    saveBook() {
      if(this.input.name.trim() == '')
      return this.showErrorToast('Name of book is required!')
      if(this.input.author.trim() == '')
      return this.showErrorToast('Author is required!')
      if(this.editBook.copies == '')
      return this.showErrorToast('Copies of book should be a number')
      if(this.input.category.trim() == '')
      return this.showErrorToast('Category is required!')

      this.books.unshift({ ...this.input });
      this.clearFields();
      this.$bvModal.hide("addModal");
      this.showSuccessToast('Success','Book added successfully')
    },
    updateBook() {
      if(this.editBook.name.trim() == '')
      return this.showErrorToast('Name of book is required!')
      if(this.editBook.author.trim() == '')
      return this.showErrorToast('Author is required!')
      if(this.editBook.copies.trim() == '')
      return this.showErrorToast('Copies of book is required!')
      if(this.editBook.copies == '')
      return this.showErrorToast('Copies of book should be a number')
      if(this.editBook.category.trim() == '')
      return this.showErrorToast('Category is required!')

      this.$set(this.books, this.editIndex, this.editBook)
      this.$bvModal.hide("editModal");
      this.showSuccessToast('Book updated successfully')
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
