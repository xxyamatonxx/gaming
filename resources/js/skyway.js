
let localStream;

// カメラ映像取得
navigator.mediaDevices.getUserMedia({
  video: true,
  audio: true
})
  .then(stream => {
    // 成功時にvideo要素にカメラ映像をセットし、再生
    const videoElm = document.getElementById('my-video');
    videoElm.srcObject = stream;
    videoElm.play();
    // 着信時に相手にカメラ映像を返せるように、グローバル変数に保存しておく
    localStream = stream;
  }).catch(error => {
    // 失敗時にはエラーログを出力
    console.error('mediaDevice.getUserMedia() error:', error);
    return;
  });

//Peer作成
const peer = new Peer({
  key: '693d2132-b347-4ff2-be1a-5ee0abc5a173',
  debug: 3
});

//PeerID取得
peer.on('open', () => {
  document.getElementById('my-id').textContent = peer.id;
});

