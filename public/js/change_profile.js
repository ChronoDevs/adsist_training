(function() {
  "use strict";

  // フォームのバリデーション
  new Vue({
    el: '#changeprof_form',
    data: {
      nameError: false,
      emailError: false,
      brandError: false,
      businessError: false,
      urlError: false,
      accountError: false,
      name: null,
      email: null,
      brand: null,
      business: null,
      url: null,
      account: null,
      placeholder_name: 'お名前をご入力ください',
      placeholder_email: 'メールアドレスをご入力ください',
      placeholder_brand: 'ブランド名ををご入力ください',
      placeholder_business: '業種をご入力ください',
      placeholder_url: 'サイトURLをご入力ください',
      placeholder_account: 'カラーミーアカウントをご入力ください'
    },
    methods: {
      checkForm: function (e) {

        this.nameError = false;
        this.emailError = false;
        this.brandError = false;
        this.businessError = false;
        this.urlError = false;
        this.accountError = false;

        if (!this.name) {
          this.nameError = true;
          this.placeholder_name = '必ずご入力ください'
        }

        if (!this.email) {
          this.emailError = true;
          this.placeholder_email = '必ずご入力ください'
        } else if (!this.validEmail(this.email)) {
          this.emailError = true;
          this.placeholder_email = 'メールアドレスをご入力ください'
          this.email = null;
        }

        if (!this.brand) {
          this.brandError = true;
          this.placeholder_brand = '必ずご入力ください'
        }

        if (!this.business) {
          this.businessError = true;
          this.placeholder_business = '必ずご入力ください'
        }

        if (!this.url) {
          this.urlError = true;
          this.placeholder_url = '必ずご入力ください'
        }

        if (!this.account) {
          this.accountError = true;
          this.placeholder_account = '必ずご入力ください'
        }

        if (!this.nameError && !this.emailError && !this.brandError && !this.businessError && !this.urlError && !this.accountError) {
          return true;
        }

        e.preventDefault();
      },
      validEmail: function (email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
      },
      clear: function() {
        this.nameError = false;
        this.emailError = false;
        this.brandError = false;
        this.businessError = false;
        this.urlError = false;
        this.accountError = false;
        this.name = null;
        this.email = null;
        this.brand = null;
        this.business = null;
        this.url = null;
        this.account = null;
        this.placeholder_name = 'お名前をご入力ください';
        this.placeholder_email = 'メールアドレスをご入力ください';
        this.placeholder_brand = 'ブランド名ををご入力ください';
        this.placeholder_business = '業種をご入力ください';
        this.placeholder_url = 'サイトURLをご入力ください';
        this.placeholder_account = 'カラーミーアカウントをご入力ください';
      }
    }
  })
})();
