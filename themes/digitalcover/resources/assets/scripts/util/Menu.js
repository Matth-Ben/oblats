import gsap from 'gsap'
import store from './store'

export default class Menu {
  constructor() {
    this.menuOpen = false
    this.isAnimating = false

    this.bindMethods()
    this.getElems()
    this.addEvents()
    this.init()

    this.onPageChange(window.location.href)
  }

  bindMethods() {
    this.toggle = this.toggle.bind(this)
  }

  getElems() {
    this.$toggler = document.querySelector('.header-nav__toggler')
    this.$top = document.querySelector('.header-top')
    this.$nav = document.querySelector('.header-nav')
    this.$items = this.$nav.querySelectorAll('.header-nav__item-link')
    this.$login = this.$nav.querySelector('.login-label')
  }

  addEvents() {
    this.$toggler && this.$toggler.addEventListener('click', this.toggle)
  }

  init() {
    const tl = gsap.timeline({
      onStart: () => {
        resolve()
      }
    })

    tl
      .set(this.$nav, { xPercent: window.innerWidth < 1025 ? 100 : 0 })
      .set(this.$items, { yPercent: window.innerWidth < 1025 ? 100 : 0 })
  }

  toggle() {
    if (this.isAnimating) return

    if (this.menuOpen) this.close()
    else this.open()
  }

  open() {
    return new Promise((resolve) => {
      this.menuOpen = true
      this.$toggler.classList.add('open')

      const tl = gsap.timeline({
        defaults: {
          ease: 'power3.out',
          duration: 0.75
        },
        onStart: () => {
          this.menuOpen = true
        }
      })

      tl
        .fromTo(this.$nav, { xPercent: 100 }, { xPercent: 0 }, 0)
        .fromTo(this.$items, {
          yPercent: 100
        }, {
          yPercent: 0,
          stagger: 0.06
        }, 0.04)

      resolve()
    })
  }

  close() {
    return new Promise((resolve) => {
      this.menuOpen = false
      this.$toggler.classList.remove('open')

      const tl = gsap.timeline({
        onStart: () => {
          this.menuOpen = false
        }
      })

      tl.fromTo(this.$nav, {
        xPercent: 0
      }, {
        xPercent: 100,
        duration: 0.75,
        ease: 'power3.out'
      }, 0)

      resolve()
    })
  }

  resize() {
    this.init()

    if (this.menuOpen) this.close()
  }

  scroll() {
    if (store.detect.isMobile) return

    const last = this.currentScroll
    const scroll = store.smoothScroll.scroll

    this.currentScroll = scroll

    if (last < this.currentScroll && this.currentScroll > store.w.h) {
      gsap.to([this.$top, this.$nav], {
        y: -126,
        duration: 0.8,
        ease: 'power3.out'
      })
    } else if (last >= this.currentScroll) {
      gsap.to([this.$top, this.$nav], {
        y: 0,
        duration: 0.8,
        ease: 'power3.out'
      })
    }
  }

  // eslint-disable-next-line no-unused-vars
  onPageChange(loc) {
    if (this.menuOpen) this.close()

    this.$items.forEach((item) => {
      item.classList.contains('active') && item.classList.remove('active')
      if (item.href === loc) {
        item.classList.add('active')
      }
    })
  }
}

