(function() {
  "use strict";

  // フォームのバリデーション
  new Vue({
    el: '#regist_form',
    data: {
      emailError: false,
      passwordError: false,
      email: null,
      password: null,
      placeholder_email: 'メールアドレス',
      placeholder_password: 'パスワード'
    },
    methods: {
      checkForm: function (e) {

        this.emailError = false;
        this.passwordError = false;

        if (!this.email) {
          this.emailError = true;
          this.placeholder_email = '必ずご入力ください'
        }

        if (!this.password) {
          this.passwordError = true;
          this.placeholder_password = '必ずご入力ください'
        }

        if (!this.emailError && !this.passwordError) {
          return true;
        }

        e.preventDefault();
      }
    }
  })
})();
