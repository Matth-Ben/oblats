import { Renderer } from '@unseenco/taxi';
import { browser } from '../util/browserInfo'
import blockList from '../blocks/blockList'
import store from '../util/store'

export default class PageTaxi extends Renderer {
  initialLoad() {
    store.loader.play()

    this.onEnter()
    this.onEnterCompleted()
  }

  onEnter() {
    this.view = this.page
    this.startBlocksEnterCompleted = this.startBlocksEnterCompleted.bind(this)

    this.checkEdgeElems()
    this.checkIEElems()
    this.checkSafariElems()

    store.observer && store.observer.on()

    this.blockList = blockList
    this.blocks = []
    if (this.blockList && this.blockList.length) this.initBlocks()
  }

  onLeave() {
    if (store.scrollEngine === 'lenis' || !store.scrollEngine) store.observer.off()

    for (let i = 0; i < this.blocks.length; i++) {
      for (let j = 0; j < this.blocks[i].instances.length; j++) {
        if (!this.blocks[i].instances[j].class.destroyLast) this.blocks[i].instances[j].class.destroy()
      }
    }
  }

  onLeaveCompleted() {
    store.observer && store.observer.off()

    // Destroy blocks with `destroyLast` property set to `true`
    for (let i = 0; i < this.blocks.length; i++) {
      for (let j = 0; j < this.blocks[i].instances.length; j++) {
        if (this.blocks[i].instances[j].class.destroyLast) this.blocks[i].instances[j].class.destroy()
      }
    }
  }

  startBlocksEnterCompleted() {
    for (let i = 0; i < this.blocks.length; i++) {
      for (let j = 0; j < this.blocks[i].instances.length; j++) {
        const { el, once } = this.blocks[i].instances[j].class

        this.blocks[i].instances[j].class.onEnterCompleted()

        store.observer.observe({
          el,
          repeat: true,
          once,
          cb: (e) => {
            this.blocks[i].instances[j].class.isInView = e
            this.blocks[i].instances[j].class.inView(e)
          }
        })
      }
    }
  }

  initBlocks() {
    store.detect.isMobile && (this.blockList = this.blockList.filter((e) => e.mobile !== false))

    let totalBlocks = 0
    let loadedBlocks = 0

    for (let i = 0; i < this.blockList.length; i++) {
      const foundBlocks = this.page.querySelectorAll('.' + this.blockList[i].name)

      totalBlocks += foundBlocks.length
    }

    if (totalBlocks === 0) store.loader.play()

    for (let i = 0; i < this.blockList.length; i++) {
      const foundBlocks = this.page.querySelectorAll('.' + this.blockList[i].name)
      const block = {
        name: this.blockList[i].name,
        instances: []
      }

      for (let j = 0; j < foundBlocks.length; j++) {
        const { fileName, hasMobileBlock } = this.blockList[i]
        const file = store.detect.isMobile && hasMobileBlock ? 'mobile/' + fileName : fileName

        // eslint-disable-next-line no-loop-func
        import('../blocks/' + file).then(({ default: BlockInstance }) => {
          loadedBlocks++
          block.instances.push({
            el: foundBlocks[j],
            class: new BlockInstance(foundBlocks[j])
          })

          !store.isFirstLoaded && loadedBlocks === totalBlocks && store.loader.play()
        })
      }

      this.blocks.push(block)
    }
  }

  resize() {
    for (let i = 0; i < this.blocks.length; i++) {
      for (let j = 0; j < this.blocks[i].instances.length; j++) {
        this.blocks[i].instances[j].class.resize()
      }
    }
  }

  scroll(e) {
    store.modules.parallax && store.modules.parallax.scroll(e)

    for (let i = 0; i < this.blocks.length; i++) {
      for (let j = 0; j < this.blocks[i].instances.length; j++) {
        this.blocks[i].instances[j].class.scroll(e)
      }
    }
  }

  loop() {
    if (this.blocks) {
      for (let i = 0; i < this.blocks.length; i++) {
        for (let j = 0; j < this.blocks[i].instances.length; j++) {
          this.blocks[i].instances[j].class.isInView && this.blocks[i].instances[j].class.update()
        }
      }
    }
  }

  // Useful with LocomotiveScroll
  // inView(value, way, object) {
  //   for (let i = 0; i < this.blocks.length; i++) {
  //     for (let j = 0; j < this.blocks[i].instances.length; j++) {
  //       if (this.blocks[i].instances[j].el === object.el) this.blocks[i].instances[j].class.inView(value, way, object)
  //     }
  //   }
  // }

  isEdge() {
    return browser.name === 'Microsoft Edge'
  }

  isIE() {
    return browser.name === 'Internet Explorer'
  }

  checkEdgeElems() {
    if (!this.isEdge()) return

    const elems = document.querySelectorAll('.checkEdge')

    for (let i = 0; i < elems.length; i++) {
        elems[i].classList.add('isEdge')
    }
  }

  checkIEElems() {
    if (!this.isIE()) return

    const elems = document.querySelectorAll('.checkIE')

    for (let i = 0; i < elems.length; i++) {
        elems[i].classList.add('isIE')
    }
  }

  isSafari() {
    return browser.name === 'Safari'
  }

  checkSafariElems() {
    if (!this.isSafari()) return

    const elems = document.querySelectorAll('.checkSafari')

    for (let i = 0; i < elems.length; i++) {
      elems[i].classList.add('isSafari')
    }
  }
}
