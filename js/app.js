const { createApp } = Vue

  createApp({
    data() {
      return {
            title: 'To Do List',
			todos: ["CSS","HTML","Javascript","C++"],
			newTodo: '',
      }
    },
    methods: {
		fetchData() {
			axios.get('server.php').then((res) => {
				this.todos = res.data.results
			})
		}
    },
	created() {
		this.fetchData()
	},
  }).mount('#app')