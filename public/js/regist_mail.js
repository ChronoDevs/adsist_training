(function() {
  "use strict";

  // メールアドレスのバリデーション
  new Vue({
    el: '#regist_form',
    data: {
      isError: false,
      isError2: false,
      email: null,
      placeholder: 'メールアドレス'
    },
    methods: {
      checkForm: function (e) {

        if (!this.email) {
          this.isError = true;
          this.isError2 = false;
          this.placeholder = 'メールアドレスを入力してください'
        } else if (!this.validEmail(this.email)) {
          this.isError = true;
          this.isError2 = true;
        } else {
          return true;
        }

        e.preventDefault();
      },
      validEmail: function (email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
      }
    }
  })
})();
