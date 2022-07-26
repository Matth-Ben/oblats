export default class Observer {
  constructor() {
    this.onObserve = this.onObserve.bind(this)

    this.observed = []

    this.initObserver()
    this.setElements()
  }

  initObserver() {
    this.observer = new IntersectionObserver(this.onObserve, {
      rootMargin: '0px',
      threshold: 0
    })
  }

  setElements() {
    this.$elems = document.querySelectorAll('.observe')

    for (let i = 0; i < this.$elems.length; i++) {
      this.observe({
        el: this.$elems[i],
        repeat: this.$elems[i].dataset.observerRepeat !== undefined,
        class: true
      })
    }
  }

  observe(observable) {
    this.observed.push(observable)
    this.observer.observe(observable.el)
  }

  unobserve(el) {
    this.observer.unobserve(el)
  }

  onObserve(entries) {
    for (let i = 0; i < entries.length; i++) {
      const entry = entries[i]

      if (entry.isIntersecting) {
        const target = this.observed.filter((obs) => obs.el === entry.target)[0]

        target.cb && target.cb(true)
        target.class && target.el.classList.add('in-view')
        !target.repeat && this.observer.unobserve(target.el)
      } else {
        const target = this.observed.filter((obs) => obs.el === entry.target)[0]

        target.repeat && target.class && target.el.classList.remove('in-view')
        target.repeat && target.cb && target.cb(false)
      }
    }
  }
}
