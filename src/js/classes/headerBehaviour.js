class HeaderBehaviour {
  constructor () {
    this.state = {
      headerClass: '',
      hideOnScroll: false
    };
  }

  setHeaderClass (setHeadClass) {
    this.state.headerClass = setHeadClass;
  }

  setHideOnScroll (setHideScroll) {
    this.state.hideOnScroll = setHideScroll;
  }
}
