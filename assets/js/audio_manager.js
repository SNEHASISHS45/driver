class AudioManager {
    constructor() {
        this.tones = {
            notification: 'https://assets.mixkit.co/active_storage/sfx/2869/2869-preview.mp3',
            newOrder: 'https://cdn.pixabay.com/audio/2022/03/10/audio_5072782e4e.mp3', // Urgent Melodic Ringtone (Delivery style)
            success: 'https://assets.mixkit.co/active_storage/sfx/1435/1435-preview.mp3',
            shiftStart: 'https://assets.mixkit.co/active_storage/sfx/2012/2012-preview.mp3'
        };
        this.audioObjects = {};
        this.init();
    }

    init() {
        for (const [key, url] of Object.entries(this.tones)) {
            const audio = new Audio(url);
            audio.preload = 'auto';
            this.audioObjects[key] = audio;
        }
    }

    play(tone, loop = false) {
        if (this.audioObjects[tone]) {
            const audio = this.audioObjects[tone];
            audio.currentTime = 0;
            audio.loop = loop;
            audio.play().catch(e => console.log('Audio playback blocked until user interaction'));
        }
    }

    stop(tone) {
        if (this.audioObjects[tone]) {
            this.audioObjects[tone].pause();
            this.audioObjects[tone].currentTime = 0;
        }
    }

    vibrate(pattern = [500, 200, 500, 200, 500]) {
        if ("vibrate" in navigator) {
            navigator.vibrate(pattern);
        }
    }

    notify(tone, vibration = true, loop = false) {
        this.play(tone, loop);
        if (vibration) this.vibrate();
    }
}

const audioManager = new AudioManager();
window.audioManager = audioManager;
