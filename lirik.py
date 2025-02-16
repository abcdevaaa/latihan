import sys
import time 

def jalankan_lirik():
    lirik = [
        ("You are always gonna be my love", 0.09),
        ("いつか誰かとまた恋に落ちても", 0.09),
        ("I'll remember to love", 0.09),
        ("You taught me how", 0.09),
        ("You are always gonna be the one", 0.09),
        ("今はまだ悲しい love song", 0.09),
        ("新しい歌 歌えるまで", 0.09),
    ]

    delay = [0.3, 0.7, 0.5, 0.5, 0.7, 0.5, 0.5]
    print("\n FIRST LOVE Cover by HAECHAN")
    time.sleep(2)
    for i, (baris_lagu, delay_karakter) in enumerate(lirik):
        for karakter in baris_lagu:
            print(karakter, end='')
            sys.stdout.flush()
            time.sleep(delay_karakter)
        time.sleep(delay[i])
        print('')
    print("Code by Eva")
    
jalankan_lirik()