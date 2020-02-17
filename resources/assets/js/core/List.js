class List {

    constructor() {
        this.getSubmissions();
    }

    getData() {
        return this.submissions;
    }

    getSubmissions() {
        axios.get('/submissions/all')
            .then(response => this.submissions = response.data);
    }

}

export default List;