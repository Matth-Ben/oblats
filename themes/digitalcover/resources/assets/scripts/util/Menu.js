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
    this.$itemsDropdown = document.querySelectorAll('.header-nav__item-link.dropdown')
    this.$dropdowns = document.querySelectorAll('.header-nav__item-dropdown')
    this.$contents = document.querySelectorAll('.header-nav__item-dropdown__list')
  
    this.stop = false
    this.isAnimating = false
    this.currentItem = 0
    this.currentSubMenu = 0
    this.submenuIsOpen = false
  }

  addEvents() {
    this.$toggler && this.$toggler.addEventListener('click', this.toggle)

    if (window.innerWidth < 1024) {
      this.$itemsDropdown.forEach((item, i) => {
        item.addEventListener('click', () => {
          this.toggleDropdown(item, i)
        })
      });
    } else {
      this.$itemsDropdown.forEach((item, i) => {
        item.addEventListener('mouseenter', () => {
          this.toggleDropdown(item, i)
        })
  
        item.parentNode.addEventListener('mouseleave', () => {
          this.submenuClose(item, i)
        })
      });
    }
  }

  init() {
    const tl = gsap.timeline()

    tl.set(this.$list, { xPercent: window.innerWidth < 1025 ? 100 : 0 })

    if (window.innerWidth < 1024) {
      this.$dropdowns.forEach((element) => {
        tl.set(element, {
          height: 0,
          scaleY: 0
        })
      });
    }
  }

  toggle() {
    if (this.isAnimating) return

    if (this.menuOpen) this.close()
    else this.open()
  }

  toggleDropdown(item, index) {
    if (window.innerWidth < 1024) {
      if (!this.isAnimating) {
        if (item.parentNode.classList.contains('active')) {
          this.submenuClose(item, index)
        } else {
          this.submenuOpen(item, index)
        }

        // if (item !== this.currentItem) {
        //   this.submenuClose(this.currentItem, this.currentSubMenu)
        // }
      }
    } else {
      this.isAnimating = true
      this.currentSubMenu = index
      this.currentItem = item

      this.submenuOpen(item, index)
      this.submenuIsOpen = true
    }
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

      this.$itemsDropdown.forEach((item, index) => {
        if (item.parentNode.classList.contains('active')) {
          this.submenuClose(item, index)
        }
      });

      resolve()
    })
  }

  submenuOpen(item, i) {
    item.parentNode.classList.add('active')

    if (window.innerWidth < 1024) {
      gsap.to(this.$dropdowns[i], {
        height: 'auto',
        scaleY: 1,
        ease: 'power3.out',
        onComplete: () => {
          this.isAnimating = false
        }
      })
    } else {
      gsap.to(this.$dropdowns[i], {
        transform: 'scale(1)',
        ease: 'power3.out'
      })
  
      gsap.to(this.$contents[i], {
        opacity: '1',
        ease: 'power3.out',
        onComplete: () => {
          this.isAnimating = false
        }
      })
    }
  }

  submenuClose(item, i) {
    item.parentNode.classList.remove('active')

    if (window.innerWidth < 1024) {
      gsap.to(this.$dropdowns[i], {
        height: 0,
        scaleY: 0,
        ease: 'power3.out',
        onComplete: () => {
          this.isAnimating = false
        }
      })
    } else {
      gsap.to(this.$contents[i], {
        opacity: '0',
        ease: 'power3.out'
      })

      gsap.to(this.$dropdowns[i], {
        transform: 'scale(0)',
        ease: 'power3.out',
        onComplete: () => {
          this.isAnimating = false
        }
      })
    }
  }

  resize() {
    this.init()

    if (this.menuOpen) this.close()
  }

  scroll() {
    if (store.detect.isMobile) return

    const scroll = store.smoothScroll.scroll

    this.currentScroll = scroll

    for (let i = 0; i < this.$itemsDropdown.length; i++) {
      if (this.$itemsDropdown[i].classList.contains('active')) {
        this.submenuClose(i)
      }
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

