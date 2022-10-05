import App from './App'
import AppTaxi from './AppTaxi'
import store from './util/store'

if (store.debug) {
  import('./util/Grid').then(({ default: Grid }) => {
    store.modules.grid = new Grid()
  })
}

// if (!store.detect.isMobile) {
//   import('./util/Parallax').then(({ default: Parallax }) => {
//     store.modules.parallax = new Parallax()
//   })
// }

window.addEventListener('load', () => {
  if (store.ajaxEngine === 'highway') {
    // eslint-disable-next-line no-new
    new App()
  } else {
    // eslint-disable-next-line no-new
    new AppTaxi()
  }
})
