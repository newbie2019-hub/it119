<template>
  <div id="app">
      <div class="container pt-4 mb-3">
        <h6 class="text-muted">Here are your books</h6>
        <div class="row mt-2">
          <div class="col-11 col-sm-11 col-md-11 col-lg-11">
            <div class="row justify-content-end mr-1 mb-3">
              <b-button variant="btn rounded-pill btn-outline-primary btn-sm" v-on:click="$bvModal.show('addModal')">
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
                      <td>{{ book.category.category }}</td>
                      <td>
                        <a type="button" v-on:click="$bvModal.show('editModal'); id = i; data = {...book}">
                        <img
                          src="@/assets/images/edit.png"
                          class="mr-2"
                          height="25" /></a>
                        <a type="button" @click.prevent="$bvModal.show('deleteModal'); id = book.id;">
                        <img src="@/assets/images/delete.png" class="mr-2" height="16"/></a>
                        <a type="button" v-on:click="book_data.book_id = book.id; id = i; $bvModal.show('borrowModal'); ">
                        <img
                          src="@/assets/images/borrow.png"
                          class="cursor-pointer mr-2"
                          height="20"/>
                        </a>
                        <a type="button" v-on:click="book_data.book_id = book.id; id = i; $bvModal.show('returnModal'); ">
                        <img
                          src="@/assets/images/return.png"
                          class="cursor-pointer"
                          height="20"
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

    <b-modal id="addModal" centered title="Add Book">
      <form class="pl-5 pr-5">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" v-model="data.name" class="form-control" id="name" placeholder="" />
        </div>
        <div class="form-group">
          <label for="author">Author</label>
          <input type="text" v-model="data.author" class="form-control" id="author" placeholder="" />
        </div>
        <div class="form-group">
          <label for="copies">Copies</label>
          <input v-model="data.copies" class="form-control" id="copies" placeholder="" type="number"/>
        </div>
        <div class="form-group">
          <label for="customSelect">Category</label>
           <select id="customSelect" v-model="data.category_id" name="cars" class="custom-select">
            <option selected disabled>Please select a category</option>
             <option v-for="(categ, i) in categories" :key="i" :value="categ.id">{{categ.category}}</option>
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
          <input type="text" v-model="data.name" class="form-control" id="name" placeholder="" />
        </div>
        <div class="form-group">
          <label for="author">Author</label>
          <input type="text" v-model="data.author" class="form-control" id="author" placeholder="" />
        </div>
        <div class="form-group">
          <label for="copies">Copies</label>
          <input v-model="data.copies" class="form-control" id="copies" placeholder="" type="number"/>
        </div>
        <div class="form-group">
          <label for="customSelect">Category</label>
          <select id="customSelect" v-model="data.category_id" name="cars" class="custom-select">
            <option selected disabled>Please select a category</option>
            <option v-for="(categ, i) in categories" :key="i" :value="categ.id">{{categ.category}}</option>
          </select>
        </div>
      </form>
      <template #modal-footer = {cancel}>
        <b-button variant="primary" size="sm" @click="cancel()"> Cancel </b-button>
        <b-button size="sm" variant="success" v-on:click="bookUpdate">
          Update Book
        </b-button>
      </template>
    </b-modal>

    <b-modal id="deleteModal" centered title="Confirm Delete">
      <p class="my-4">Are you sure you want to delete this book?</p>
      <template #modal-footer="{ cancel }">
        <b-button variant="info" @click="cancel()"> Cancel </b-button>
        <b-button variant="danger" v-on:click="bookDelete"> Confirm </b-button>
      </template>
    </b-modal>

    <!--- BORROWED BOOK --->
    <b-modal id="borrowModal" centered title="Borrow Book">
      <form class="pl-5 pr-5">
        <div class="form-group">
          <label for="copies">Copies</label>
          <input v-model="book_data.copies" class="form-control" id="copies" placeholder="" type="number"/>
        </div>
        <div class="form-group">
          <label for="customSelect">Patron</label>
          <select id="customSelect" v-model="book_data.patron_id" name="patrons" class="custom-select">
            <option selected disabled>Please select a patron (optional)</option>
            <option v-for="(patron, i) in patrons" :key="i" :value="patron.id">  {{patron.first_name +" " +patron.middle_name +" " +patron.last_name}}</option>
          </select>
        </div>
      </form>
      <template #modal-footer = {cancel}>
        <b-button variant="primary" size="sm" @click="cancel()"> Cancel </b-button>
        <b-button size="sm" variant="success" v-on:click="borrowBook">
          Borrow Book
        </b-button>
      </template>
    </b-modal>

    <!--- RETURNED BOOK --->
    <b-modal id="returnModal" centered title="Return Book">
      <form class="pl-5 pr-5">
        <div class="form-group">
          <label for="copies">Copies</label>
          <input v-model="book_data.copies" class="form-control" id="copies" placeholder="" type="number"/>
        </div>
        <div class="form-group">
          <label for="customSelect">Patron</label>
          <select id="customSelect" v-model="book_data.patron_id" name="patrons" class="custom-select">
            <option selected disabled>Please select a patron (optional)</option>
            <option v-for="(patron, i) in patrons" :key="i" :value="patron.id">  {{patron.first_name +" " +patron.middle_name +" " +patron.last_name}}</option>
          </select>
        </div>
      </form>
      <template #modal-footer = {cancel}>
        <b-button variant="primary" size="sm" @click="cancel()"> Cancel </b-button>
        <b-button size="sm" variant="success" v-on:click="returnBook">
          Return Book
        </b-button>
      </template>
    </b-modal>
  </div>
</template>
<script>
import { mapActions, mapGetters, mapState } from "vuex";
import {toast} from '@/assets/js/toast/vue-toast'
export default {
  mixins: [toast],
  data() {
    return {
      id: '',
      data: {
        name: '', author: '', copies: '', category_id: ''
      },
      modalId: '',
      book_data: { book_id: '', copies: '', patron_id: ''}
    }
  },
  mounted() {
    document.title = "Book Management";
    this.getBooks();
    this.getCategories();
    this.getPatrons();
    this.$root.$on('bv::modal::show', (bvEvent, modalId) => {
      this.modalId = modalId;
      this.clearData();
    })
    this.$root.$on('bv::modal::hide', () => {
      this.clearData();
    })
  },
  computed: {
    ...mapState("books", ["books", "categories"]),
    ...mapState("patrons", ["patrons"])
  },
  methods: {
    ...mapActions("books", ["getBooks", "deleteBook", "storeBook", "updateBook", "getCategories"]),
    ...mapActions("patrons", ["getPatrons"]),
    ...mapActions("borrowed", ["createBorrowed"]),
    ...mapActions("returned", ["createReturned"]),
    ...mapGetters("books", ["getBooksData"]),
    async borrowBook(){
      if(this.book_data.patron_id == ''){
        delete this.book_data.patron_id
      }
      const res = await this.createBorrowed({data: this.book_data, index: this.id})
      if(res.status == 200){
        this.showSuccessToast('Book borrowed successfully!')
        this.$bvModal.hide(this.modalId)
      }
      else{
        this.showError(res.data)
      }
    },
    async returnBook(){
      if(this.book_data.patron_id == ''){
        delete this.book_data.patron_id
      }
      const res = await this.createReturned({data: this.book_data, index: this.id})
      if(res.status == 200){
        this.showSuccessToast('Book returned successfully!')
        this.$bvModal.hide(this.modalId)
      }
      else{
        this.showError(res.data)
      }
    },
    async saveBook(){
      const res = await this.storeBook({...this.data})
      if(res.status == 200){
        this.$bvModal.hide(this.modalId);
        this.showSuccessToast('Book saved successfully!')
      }
      else{
        this.showError(res.data)
      } 
    },
    async bookDelete(){
      const res = await this.deleteBook(this.id);
      if(res.status !== 200)
       this.showError(res.data)
       
      this.$bvModal.hide('deleteModal');
    },
    async bookUpdate(){
      const res = await this.updateBook({index: this.id, data: this.data})
      if(res.status == 200){
        this.showSuccessToast('Book updated successfully!')
        this.$bvModal.hide('editModal')
      }
      else{
        this.showError(res.data)
      }
    },
    clearData(){
      this.data = { name: '', author: '', copies: '', category_id: ''}
    },
    showError(data){
      for (const key of Object.keys(data)) {
        window.setInterval(this.showErrorToast(data[key][0]), 1000); 
      }
    }
  },
  watch: {

  }
}
</script>
