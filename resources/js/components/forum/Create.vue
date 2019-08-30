<template>

	<v-container>
	  <form @submit.prevent="create">
	    <v-text-field
	      v-model="form.title"
	      label="Title"
	      type="text"
	      required
	    ></v-text-field>

	    <v-select
	      :items="categories"
	      item-text="name"
	      item-value="id"
	      v-model="form.category_id"
	      label="Category"
	    ></v-select>

		<vue-simplemde v-model="form.body"/>

	    <v-btn 
	    color="green"
	    type="submit"
	    >Create</v-btn>

	  </form>
	</v-container>
</template>
<script>
	export default {
		data() {
			return {
				form: {
					title: null,
					category_id: null,
					body: null
				},
				categories: [],
				errors: {}
			}
		},
		created() {
			axios.get('/api/category')
			.then(res => this.categories = res.data.data)
			.catch(error => console.log(error.data.errors))
		},
		methods: {
			create() {
				axios.post('api/question', this.form)
				.then(res => this.$router.push(res.data.path))
				.catch(error => this.errors = error.response.data.error)
			}
		}
	}
</script>

<style>
	
</style>