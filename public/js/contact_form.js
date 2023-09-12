(function() {
  "use strict";

  // フォームのバリデーション
  new Vue({
    el: '#contact_form',
    data: {
      contentError: false,
      nameError: false,
      emailError: false,
      emailError2: false,
      companyError: false,
      content: null,
      name: null,
      email: null,
      company: null,
      placeholder_content: 'お問い合わせ内容をご入力ください',
      placeholder_name: 'お名前をご入力ください',
      placeholder_email: 'メールアドレスをご入力ください',
      placeholder_company: '御社名ををご入力ください'
    },
    methods: {
      checkForm: function (e) {

        this.contentError = false;
        this.nameError = false;
        this.emailError = false;
        this.emailError2 = false;
        this.companyError = false;

        if (!this.content) {
          this.contentError = true;
          this.placeholder_content = '必ずご入力ください'
        }

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

        if (!this.company) {
          this.companyError = true;
          this.placeholder_company = '必ずご入力ください'
        }

        if (!this.contentError && !this.nameError && !this.emailError && !this.emailError2 && !this.companyError) {
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
