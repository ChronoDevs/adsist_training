(function() {
  "use strict";

  // フォームのバリデーション
  new Vue({
    el: '#document_form',
    data: {
      nameError: false,
      companyError: false,
      emailError: false,
      emailError2: false,
      budgetError: false,
      name: null,
      company: null,
      budget: null,
      email: null,
      placeholder_name: 'お名前をご入力ください',
      placeholder_company: '御社名ををご入力ください',
      placeholder_email: 'メールアドレスをご入力ください',
      placeholder_budget: '月刊広告予算をご入力ください',
    },
    methods: {
      checkForm: function (e) {

        this.nameError = false;
        this.companyError = false;
        this.emailError = false;
        this.emailError2 = false;
        this.budgetError = false;

        if (!this.name) {
          this.nameError = true;
          this.placeholder_name = '必ずご入力ください'
        }

        if (!this.company) {
          this.companyError = true;
          this.placeholder_company = '必ずご入力ください'
        }

        if (!this.email) {
          this.emailError = true;
          this.emailError2 = false;
          this.placeholder_email = '必ずご入力ください'
        } else if (!this.validEmail(this.email)) {
          this.emailError = true;
          this.emailError2 = true;
        }

        if (!this.budget) {
          this.budgetError = true;
          this.placeholder_budget = '必ずご入力ください'
        }

        if (!this.budgetError && !this.nameError && !this.emailError && !this.emailError2 && !this.companyError) {
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
