(function() {
  "use strict";

  // よくある質問アコーディオン
  Vue.component('faq-accordion', {
    template: `
    <div class="faq-accordion" v-cloak>
      <div class="fqaccrdn-trigger" :class="{ 'open': isOpened }" @click="accordionToggle()">
        <slot name="title"></slot>
      </div>
      <transition name="faq-accordion" :class="{ 'open': isOpened }" @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave" @leave="leave">
        <div class="fqaccrdn-target" v-if="isOpened">
          <slot name="body"></slot>
        </div>
      </transition>
    </div>
    `,
    data() {
      return {
        isOpened: false
      };
    },
    methods: {
      accordionToggle: function(){
        this.isOpened = !this.isOpened;
      },
      beforeEnter: function(el) {
        el.style.height = '0';
      },
      enter: function(el) {
        el.style.height = el.scrollHeight + 'px';
      },
      beforeLeave: function(el) {
        el.style.height = el.scrollHeight + 'px';
      },
      leave: function(el) {
        el.style.height = '0';
      }
    }
  });

  new Vue({
    el: '#faq_cont'
  });
})();
