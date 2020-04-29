customElements.define('x-graph', class extends HTMLElement {
  constructor() {
    super();
    let num = parseInt(this.getAttribute('numbers'), 24) ;
    this.attachShadow({ mode: 'open' }).innerHTML = `
      <style>

      .graph {
        width: 100px;
        height: 100px;
        position: relative;
        float: left;
      }
      .graph:after {
        content: '';
        display: block;
        width: 100%;
        height: 100%;
        border-radius: var(--corner, '100% 0 0 0');
        background: var(--color, #fff);
      }

      </style>
      ${ '<div class="graph"></div>'.repeat(num) }
    `;
  }
  _random(array) {
    return array[Math.floor(Math.random() * array.length)];
  }
  connectedCallback() {
    const graphs = this.shadowRoot.querySelectorAll('.graph');
    [].forEach.call(graphs, g => {
      g.style.setProperty('--color', this._random([
        '#293E96', '#FFEE67', '#FFB757', '#6A3B3B'
      ]));
      g.style.setProperty('--corner', this._random([
        '100% 0 0 0', '0 100% 0 0',
        '0 0 100% 0', '0 0 0 100%'
      ]));
    });
  }
});