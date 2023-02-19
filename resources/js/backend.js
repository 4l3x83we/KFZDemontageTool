import './bootstrap';

import '../sass/backend.scss'

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

$('#dataTableEmpty').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json"
    }
});

$('#dataTableFahrzeuge').DataTable({
    "columnDefs": [
        { orderable: false, targets: [0, 2, 3, 4, 5, 6, 7] },
    ],
    "order": [
        [1, 'asc'],
    ],
    "lengthMenu": [ [15, 30, 50, 75, 100, -1], [15, 30, 50, 75, 100, "All"] ],
    "info": false,
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json"
    }
});
