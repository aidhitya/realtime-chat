<template>
  <div class="chat-list">
    <div class="messages" v-for="chat in chats">
      <div class="users">
        {{ chat.user.name }} -
        <span class="time">{{ chat.created_at }}</span>
      </div>
      <div class="message">
        <p>"{{ chat.subject }}"</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      chats: [],
    };
  },
  mounted() {
    axios
      .get(`api/chat`)
      .then((response) => [(this.chats = response.data), this.scrollBottom()]);
  },
  methods: {
    scrollBottom() {
      setTimeout(function () {
        var chatList = document.getElementsByClassName("chat-list")[0];
        chatList.scrollTop = chatList.scrollHeight;
      }, 1);
    },
  },
};
</script>

<style lang="scss">
.chat-list {
  max-height: 300px;
  overflow-y: auto;

  .messages {
    margin-top: 5px;
    .time {
      font-weight: 800;
    }

    .message {
      font-size: 1.2rem;
    }
  }
}
</style>