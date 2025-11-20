import axios from 'axios';

window.axios = axios;

// Set header default untuk AJAX
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Jika Anda memakai API Sanctum (opsional)
// window.axios.defaults.withCredentials = true;
