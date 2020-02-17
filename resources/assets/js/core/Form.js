import Errors from './Errors';

class Form {

    constructor(data) {

        this.originalData = data;

        for (let field in data) {
            this[field] = data[field];
        }
        this.errors = new Errors();

    }

    // Post the request to the controller
    post(url){
        axios.post(url, this.data())
            .then(this.onSuccess.bind(this))
            .catch(this.onFail.bind(this))
            .catch(error => this.form.errors.record(error.response.data.errors));
    }

    // Clean the data to be saved
    data(){
        let data = Object.assign({}, this);
        delete data.errors;
        return data;
    }

    // Reset the form on the submit
    onSuccess(){
        alert('Submission Saved');
        this.reset();
        this.errors.clear();
    }

    // Record the errors if there is a failure
    onFail(error){
        this.errors.record(error.response.data.errors);
    }

    // Reset the form data
    reset() {
        for (let field in this.originalData) {
            this[field] = '';
        }
    }

    getSubmissions() {
        axios.get('/submissions/all')
            .then(response => this.submissions = response.data);
    }

}

export default Form;