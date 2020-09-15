<template>
  <div>
    <form action="#">
      <div class="form-action">
        <textarea v-model="pesan" class="form-control" placeholder="Pesan" @keydown="handleEnter"></textarea>
      </div>
    </form>
  </div>
</template>

<script>
import moment from "moment";
import Bus from "../../bus";
export default {
  data() {
    return {
      pesan: "",
    };
  },
  mounted() {},
  methods: {
    handleEnter(event) {
      if (event.keyCode == 13 && !event.ShiftKey) {
        event.preventDefault();
        this.submit();
      }
    },
    submit() {
      let body = this.pesan.trim();

      if (body === "") {
        return;
      }

      let newPesan = {
        subject: body,
        created_at: moment().utc(0).format("YY:MM:DD HH:mm:ss"),
        user: {
          name: Laravel.user.name,
        },
      };

      axios.post(`chat/store`, { subject: body }).then((response) => {
        Bus.$emit("sent-chat", newPesan);
        this.pesan = "";
      });
    },
  },
};
</script>