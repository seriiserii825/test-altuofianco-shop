<script setup>
import {ref} from "vue";
import RestrictedAreaLogin from "../../components/login/RestrictedAreaLogin.vue";
import RestrictedInsertPassword from "../../components/login/RestrictedInsertPassword.vue";
import CheckPassword from "../../components/login/CheckPassword.vue";
import PasswordReceived from "../../components/login/PasswordReceived.vue";
const component_view = ref("login");
// const component_view = ref("check_password");
// const component_view = ref("set_password");
// const component_view = ref("password_received");
function emitLogin(value) {
  if (value === 1) {
    component_view.value = "check_password";
  } else {
    component_view.value = "set_password";
  }
}
</script>
<template>
  <div class="restricted-area-view">
    <RestrictedAreaLogin
        v-if="component_view === 'login'"
        @emit_login="emitLogin"
    />
    <RestrictedInsertPassword
        v-if="component_view === 'set_password'"
        @emit_password="component_view = 'check_password'"
    />
    <CheckPassword
        @emit_check="component_view = 'password_received'"
        v-if="component_view === 'check_password'"
    />
    <PasswordReceived
        v-if="component_view === 'password_received'"
        @emit_password_received="component_view = 'login'"
    />
  </div>
</template>
