import Block from './Block'
import Instafeed from '../util/Instafeed'
import App from '../App'

export default class InstaFeed extends Block {
  constructor(el, destroyLast) {
    super(el, destroyLast)

    this.createFeed()
  }

  bindMethods() {
    super.bindMethods()
  }

  getElems() {
    super.getElems()
  }

  events() {
    super.events()
  }

  createFeed() {
    this.feed = new Instafeed(
    {
      accessToken: window.AccessToken,
      clientId: window.ClientId,
      target: 'instafeed',
      get: 'user',
      userId: window.UserId,
      template: '<div class="feed-square"><a href="{{link}}" aria-label="Photo Instagram" target="_blank" rel="noopener"><img src="{{image}}" alt="Photo Instagram"/></a></div>',
      limit: 5,
      sortBy: 'most-recent',
      after: () => {
        App.smoothScroll.update()
      }
    })
    this.feed.run()
  }
}
