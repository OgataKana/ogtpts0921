
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

///////////////message//////////////////

$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#submit").click(function () {
        const url = "/posts/create";
        $.ajax({
            url: url,
            data: {
                text: $("#text").val()
            },
            method: "POST"
        });
        return false;
    });
    window.Echo.channel('post')
        .listen('Posted', (e) => {
            $("#board").append('<li>' + e.post.text + '</li>');
        });
});
/////////////////////////////////////
