import gsap from 'gsap'
import BaseTransitionTaxi from './baseTransitionTaxi'
import store from '../util/store'

export default class FadeTaxi extends BaseTransitionTaxi {
  hideLoader() {
    return new Promise((resolve) => {
      console.log('------ hideLoader ------')

      const tl = gsap.timeline({
        onStart: () => {
          this.scrollToTop()
        },
        onComplete: () => {
          if (store.scrollEngine === 'locomotive-scroll') store.smoothScroll.update()

          this.resetScroll()
          resolve()
        }
      })

      tl.to(store.panel, {
        opacity: 0,
        duration: 0.35,
        ease: 'power3.out'
      }, 0)
    })
  }

  showLoader() {
    return new Promise((resolve) => {
      console.log('------ showLoader ------')

      gsap.to(store.panel, {
        opacity: 1,
        duration: 0.35,
        ease: 'power3.out',
        onComplete: () => {
          resolve()
        }
      })
    })
  }
}
