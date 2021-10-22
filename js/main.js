const app = new Vue({
	el: '#root',
	data: {
		students: null,
		genderSelected: ""
	},
	created() {
		axios.get('http://localhost/php-api/api/index.php')
		.then((response) => {
			// handle success
			this.students = response.data;
		})
		.catch(function (error) {
			// handle error
			console.log(error);
		})
	},
	methods: {
		onGenderSelect() {
			axios.get('http://localhost/php-api/api/index.php', {
				params: {
					"gender": this.genderSelected
				}
			})
			.then((response) => {
				// handle success
				this.students = response.data;
			})
			.catch(function (error) {
				// handle error
				console.log(error);
			});
		}
	}
});
