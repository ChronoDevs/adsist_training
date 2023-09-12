(function() {
  "use strict";

  // フォームのバリデーション
  new Vue({
    el: '#regist_form',
    data: {
      nameError: false,
      emailError: false,
      emailError2: false,
      passwordError: false,
      name: null,
      email: null,
      password: null,
      placeholder_name: 'お名前',
      placeholder_email: 'メールアドレス',
      placeholder_password: 'パスワード'
    },
    methods: {
      checkForm: function (e) {

        this.nameError = false;
        this.emailError = false;
        this.emailError2 = false;
        this.passwordError = false;

        if (!this.name) {
          this.nameError = true;
          this.placeholder_name = '必ずご入力ください'
        }

        if (!this.email) {
          this.emailError = true;
          this.emailError2 = false;
          this.placeholder_email = '必ずご入力ください'
        } else if (!this.validEmail(this.email)) {
          this.emailError = true;
          this.emailError2 = true;
        }

        if (!this.password || !this.validPassword(this.password)) {
          this.passwordError = true;
          this.password = null;
          this.placeholder_password = '半角英数字8~12桁にてご入力ください'
        }

        if (!this.nameError && !this.emailError && !this.emailError2 && !this.passwordError) {
          return true;
        }

        e.preventDefault();
      },
      validEmail: function (email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
      },
      validPassword: function (password) {
        var re = /^([a-zA-Z0-9]{8,12})$/;
        return re.test(password);
      }
    }
  })
})();
