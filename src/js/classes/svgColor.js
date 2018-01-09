export class SvgColor {
  constructor () {
    this.state = {
      object: '',
      svgItems: '',
      onLoad: false,
      color: ''
    };
  }

  setObject (setObj) {
    this.state.object = document.getElementById(setObj);
  }

  setSvgItems (setSvgItm) {
    this.state.svgItems = this.state.object.contentDocument.getElementsByClassName(setSvgItm);
  }

  setColor (setClr) {
    this.state.color = setClr;
    for (let i = 0; i < this.state.svgItems.length; i++) {
      this.state.svgItems[i].style.fill = this.state.color;
    }
  }

  onLoad (setLoad) {
    this.state.onLoad = setLoad;
  }
}
