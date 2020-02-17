class Errors {

    constructor() {
        this.errors = {};
    }

    // Get a specific error message for the field name
    get(field) {
        if (this.errors[field]) {
            return this.errors[field][0];
        }
    }

    // Record errors returned from the API
    record(errors){
        this.errors = errors;
    }

    // Clear a specific error or all errors
    clear(field){
        if (field) {
            delete this.errors[field];
            return;
        }
        this.errors = {};
    }

    // Check if the field has an error
    invalid(field){
        return this.errors.hasOwnProperty(field);
    }

    // Check if there are any current errors
    exist(){
        return Object.keys(this.errors).length > 0;
    }

}

export default Errors;