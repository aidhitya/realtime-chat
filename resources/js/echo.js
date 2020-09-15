import Bus from './bus'
Echo.join('realtime-chat').listen('ChatEvent', (e) => {
    Bus.$emit('sent-chat', e.data)
});
