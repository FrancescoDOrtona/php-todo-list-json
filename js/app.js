const { createApp } = Vue

  createApp({
    data() {
      return {
            title: 'To Do List',
			todos: ["CSS","HTML","Javascript","C++"],
			newTodo: '',
      }
    }
  }).mount('#app')