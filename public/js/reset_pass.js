(function() {
  "use strict";

  // パスワードのバリデーション
  new Vue({
    el: '#regist_form',
    data: {
      isError: false,
      password: null,
      placeholder: 'パスワード'
    },
    methods: {
      checkForm: function (e) {

        if (!this.password || !this.validPassword(this.password)) {
          this.isError = true;
          this.placeholder = '半角英数字8~12桁にてご入力ください'
        } else {
          return true;
        }

        e.preventDefault();
      },
      validPassword: function (password) {
        var re = /^([a-zA-Z0-9]{8,12})$/;
        return re.test(password);
      }
    }
  })
})();
