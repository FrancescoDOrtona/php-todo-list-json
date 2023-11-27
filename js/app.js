const { createApp } = Vue;

createApp({
  data() {
    return {
      title: "To Do List",
      todos: [],
      newTodo: "",
    };
  },
  methods: {
    fetchData() {
      axios.get("server.php").then((res) => {
        this.todos = res.data.results;
      });
    },

    addNewTodo() {
      const data = {
        todo: this.newTodo,
      };
      axios
        .post("./store.php", data, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((res) => {
          console.log(res.data.todos);
          this.todos = res.data.todos;
          this.newTodo = "";
        });
    },
    deleteTask(ind) {
      const data = {
        index: ind,
      };
      axios
        .post("./deleteTask.php", data, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((res) => {
          console.log(res.data.todos);
          this.todos = res.data.todos;
        });
    },
    toogleTask(ind) {
      const data = {
        index: ind,
      };
      axios
        .post("./toogleTask.php", data, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((res) => {
          console.log(res.data.todos);
          this.todos = res.data.todos;
        });
    },
  },
  created() {
    this.fetchData();
  },
}).mount("#app");
