(function() {
  "use strict";

  // パスワードのバリデーション
  new Vue({
    el: '#changepass_form',
    data: {
      isError: false,
      isError_new: false,
      password: null,
      password_new: null,
      placeholder: '',
      placeholder_new: '※半角英数字8~12桁にてご入力ください',
      type_new: 'password'
    },
    methods: {
      checkForm: function (e) {

        this.isError = false;
        this.isError_new = false;

        if (!this.password || !this.validPassword(this.password)) {
          this.isError = true;
          this.placeholder = 'ご入力内容をご確認ください';
          this.password = null;
        }

        if (!this.password_new || !this.validPassword(this.password_new)) {
          this.isError_new = true;
          this.placeholder_new = '※半角英数字8~12桁にてご入力ください';
          this.password_new = null;
        }

        if (!this.isError && !this.isError_new) {
          return true;
        }

        e.preventDefault();
      },
      validPassword: function (password) {
        var re = /^([a-zA-Z0-9]{8,12})$/;
        return re.test(password);
      },
      changeType: function() {
        if(this.type_new === 'password') {
          this.type_new = 'text';
        } else {
          this.type_new = 'password'
        }
      },
      clear: function() {
        this.password = null;
        this.password_new = null;
        this.isError = false;
        this.isError_new = false;
        this.placeholder = null;
        this.placeholder_new = '※半角英数字8~12桁にてご入力ください';
      }
    }
  })
})();
