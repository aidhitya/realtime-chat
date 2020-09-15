<template>
  <div class="chat-list">
    <div class="messages">
      <div class="users">
        Nama -
        <span class="time">2020-09-10 12:01:21</span>
      </div>
      <div class="message">
        <p>"Pesan"</p>
      </div>
    </div>
    <div class="messages">
      <div class="users">
        Nama2 -
        <span class="time">2020-09-10 12:01:21</span>
      </div>
      <div class="message">
        <p>"Pesan2"</p>
      </div>
    </div>
    <div class="messages">
      <div class="users">
        Nama3 -
        <span class="time">2020-09-10 12:01:21</span>
      </div>
      <div class="message">
        <p>"Pesan3"</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss">
.chat-list {
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