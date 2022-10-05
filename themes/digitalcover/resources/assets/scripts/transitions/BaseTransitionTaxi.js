import { Transition } from '@unseenco/taxi'
import store from '../util/store'

export default class BaseTransitionTaxi extends Transition {
  onLeave({ done, from }) {
    console.log('------ onLeaveTransition ------');
    this.from = from

    store.smoothScroll && store.smoothScroll.stop()

    this.getElems()

    store.transitionComplete = false

    this.showLoader().then(() => {
      store.transitionComplete = true
      window.dispatchEvent(new CustomEvent('transitionComplete'))
      done()
    })
  }

  onEnter({ done, to }) {
    console.log('------ onEnterTransition ------');
    this.getElems()

    this.done = done

    if (store.transitionComplete) this.transitionComplete()
    else window.addEventListener('transitionComplete', this.transitionComplete.bind(this), { once: true })
  }

  scrollToTop() {
    window.scrollTo(0, 0)

    if (store.scrollEngine === 'locomotive-scroll') store.smoothScroll.setScroll(0, 0)
  }

  resetScroll() {
    window.scrollTo(0, 0)

    if (store.scrollEngine === 'locomotive-scroll') {
      store.smoothScroll.setScroll(0, 0)
      store.smoothScroll.update()
      store.smoothScroll.start()
    } else if (store.scrollEngine === 'lenis') {
      store.smoothScroll.start()
      store.smoothScroll.scroll = 0
      store.smoothScroll.targetScroll = 0
    }
  }

  transitionComplete() {
    if (store.scrollEngine === 'locomotive-scroll') store.smoothScroll.setScroll(0, 0)
    else window.scrollTo(0, 0)

    this.hideLoader().then(this.done.bind(this))
  }

  hideLoader() {}

  showLoader() {}

  getElems() {}
}
