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
    this.$body = document.querySelector('body')
    this.$toggler = document.querySelector('.header-nav__toggler')
    this.$top = document.querySelector('.header-top')
    this.$nav = document.querySelector('.header-nav')
    this.$list = document.querySelector('.header-nav__list')
    this.$items = this.$nav.querySelectorAll('.header-nav__item-link')
    this.$login = this.$nav.querySelector('.login-label')
    this.$logo = document.querySelector('.header-nav__logo')
    this.$submenu = document.querySelectorAll('.header-nav__item.dropdown')
    this.$dropdowns = document.querySelectorAll('.header-nav__item-dropdown')
    this.$contents = document.querySelectorAll('.header-nav__item-dropdown__list')
  }

  addEvents() {
    this.$toggler && this.$toggler.addEventListener('click', this.toggle)

    for (let i = 0; i < this.$submenu.length; i++) {
      this.$submenu[i].addEventListener('click', () => this.submenu(i))
    }
  }

  init() {
    const tl = gsap.timeline()

    tl.set(this.$list, { xPercent: window.innerWidth < 1025 ? 100 : 0 })
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
      this.$body.classList.add('open')

      const tl = gsap.timeline({
        defaults: {
          ease: 'power3.out',
          duration: 0.75
        },
        onStart: () => {
          this.menuOpen = true
        }
      })

      tl.fromTo(this.$list, { xPercent: 100 }, { xPercent: 0 }, 0)

      resolve()
    })
  }

  close() {
    return new Promise((resolve) => {
      this.menuOpen = false
      this.$toggler.classList.remove('open')
      this.$body.classList.remove('open')

      const tl = gsap.timeline({
        onStart: () => {
          this.menuOpen = false
        }
      })

      tl.fromTo(this.$list, {
        xPercent: 0
      }, {
        xPercent: 100,
        duration: 0.75,
        ease: 'power3.out'
      }, 0)

      for (let i = 0; i < this.$submenu.length; i++) {
        if (this.$submenu[i].classList.contains('active')) {
          this.closeSubmenu(i)
        }
      }

      resolve()
    })
  }

  submenu(i) {
    if (this.$submenu[i].classList.contains('active')) {
      this.closeSubmenu(i)
    } else {
      this.openSubmenu(i)
    }
  }

  openSubmenu(i) {
    const tl = gsap.timeline({
      ease: 'power3.out'
    })

    for (let index = 0; index < this.$submenu.length; index++) {
      if (this.$submenu[index].classList.contains('active')) {
        this.closeSubmenu(index)
      }
    }

    tl
      .to(this.$dropdowns[i], { transform: 'scale(1)' })
      .to(this.$contents[i], { opacity: '1' })

    this.$submenu[i].classList.add('active')
  }

  closeSubmenu(i) {
    const tl = gsap.timeline({
      ease: 'power3.out'
    })

    tl
      .to(this.$contents[i], { opacity: '0' })
      .to(this.$dropdowns[i], { transform: 'scale(0)' })

    this.$submenu[i].classList.remove('active')
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

    for (let i = 0; i < this.$submenu.length; i++) {
      if (this.$submenu[i].classList.contains('active')) {
        this.closeSubmenu(i)
      }
    }

    if (last < this.currentScroll && this.currentScroll > store.w.h) {
      gsap.to([this.$top, this.$nav], {
        y: '-4rem',
        duration: 0.8,
        ease: 'power3.out'
      })

      gsap.to(this.$logo, {
        scale: 0.7,
        duration: 0.8,
        ease: 'power3.out'
      })
    } else if (last > this.currentScroll) {
      gsap.to([this.$top, this.$nav], {
        y: 0,
        duration: 0.8,
        ease: 'power3.out'
      })

      gsap.to(this.$logo, {
        scale: 1,
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

