import axios from 'axios'
window.axios = axios

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from '@ably/laravel-echo'
// import * as Ably from 'ably'

// window.Ably = Ably
// window.Echo = new Echo({
//     broadcaster: 'ably',
// })

// window.Echo.connector.ably.connection.on((stateChange) => {
//     if (stateChange.current === 'connected') {
//         console.log('connected to ably server')
//     }
// })
