import Vue from 'vue';

import axios from 'axios';

import Form from './js/core/Form';
import List from './js/core/List';


window.axios = axios;
window.Form = Form;

new Vue({
    el: '#submissionform',

    data: {
        form: new Form({
            name: '',
            date: '',
            time: '',
            message: ''
        })
    },

    methods: {
        onSubmit() {
            this.form.post('/submissions/store');
        }
    }
});