import './bootstrap';

import '../sass/app.scss'

import * as bootstrap from 'bootstrap';

import '@/bootstrap-icons/font/bootstrap-icons.scss';

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

setTimeout(function () {
    // Adding the class dynamically
    $('#alert').addClass('visually-hidden');
}, 15000);

import.meta.glob([
    '../assets/images/**',
    '../assets/fonts/**',
]);
