import React, { useEffect ,useState } from 'react'
import { Helmet } from 'react-helmet'
import { Link } from 'react-router-dom'
import axios from 'axios'

const courses = ['LAB', 'DEV']

// const user = {
//   id: 1234,
//   displayName: 'ippei',
//   course: 0,
//   graduatingClass: 8,
//   userPhoto:
//     'https://avatars2.githubusercontent.com/u/36134103?s=460&u=77193745c8c24b80d994c3407efb1be92697cfd5&v=4',
//   selfIntroduction:
//     'ご覧いただきありがとうございます。お互いが気持ちの良いお取引をできるよう心がけています。よろしくお願いします。',
//   twitterId: 'realDonaldTrump',
//   facebookId: 'kazuhira4126',
//   githubId: 'kazuhi-ra',
//   plant1: 2,
//   plant2: 0,
//   plant3: 3,
// }

const posts = [
  {
    id: 1,
    price: 30000,
    postName: 'あの日の火鍋',
    images: [
      'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228232047.jpg',
      'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228231928.jpg',
    ],
  },
  {
    id: 2,
    price: 3000000,
    postName: 'あの日の火鍋',
    images: [
      'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228232047.jpg',
      'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228231928.jpg',
    ],
  },
]

const UserSellPosts = () => (
  <>
    {posts.map(post => (
      <div key={post.id}>
        <Link to={`/posts/${post.id}`}>
          <img src={post.images[0]} alt={post.postName} width='200' />
          <p>{post.postName}</p>
          <p>￥{post.price.toLocaleString()}</p>
        </Link>
      </div>
    ))}
  </>
)

const selfEsteems = [
  {
    user: 'kichis',
    userId: 3,
    userPhoto:
      'https://2.bp.blogspot.com/-mAPlMWTEu6w/Vf-avVV_qWI/AAAAAAAAyKQ/fFlCoLI8v0g/s140/icon_business_woman06.png',
    descriptions:
      'ippeiさんの商品はご自身でされている表記より状態が良くないように思われました。',
  },
  {
    user: 'yamagishi',
    userId: 2,
    userPhoto:
      'https://2.bp.blogspot.com/-FiaaCK2PiUU/Vf-e-RvXTrI/AAAAAAAAyRw/_a07PGYtWr8/s145/icon_medical_man01.png',
    descriptions: 'ippeiさんの対応は微妙でした。',
  },
]

const SelfEsteem = () => {
  return (
    <>
      <div>他己評価です</div>
      {selfEsteems.map(selfEsteem => (
        <div>
          <Link to={`/u/${selfEsteem.userId}`}>
          <p>{selfEsteem.user}</p>
          </Link>
          <img src={selfEsteem.userPhoto} alt='ユーザーの写真です' />
          <p>{selfEsteem.descriptions}</p>
        </div>
      ))}
    </>
  )
}

const User = ({ match }) => {
  const [a, setA] = useState(true)
  const [user, setUser] = useState({
    user_name: ''
  })

  const paramsId = match.params.id
  const pathName = `users/${paramsId}`
  const fetchURL = `http://localhost:3001/${pathName}`

  useEffect(() => {
    axios.get(fetchURL).then(response => {
      setUser(response.data)
      console.log(response.data)
    })
  }, [fetchURL])

  return (
    <>
      <Helmet>
        <title>闇市 - {user.user_name}</title>
      </Helmet>
      <div>ユーザーの紹介ページです</div>

      <img src={user.avatar} alt='ユーザーの写真です' width='100' />
      <p>{user.user_name}</p>
      <p>
        {courses[user.course]}コース {user.class}期
      </p>
      <p>{user.self_introduction}</p>
      <div>
        <a href={`http://twitter.com/${user.twitter_id}`}>twitter</a>
      </div>
      <div>
        <a href={`https://www.facebook.com/${user.facebook_id}`}>facebook</a>
      </div>
      <div>
        <a href={`https://github.com/${user.github_id}`}>github</a>
      </div>
      <div>　</div>
      <button onClick={() => setA(true)}>この出品者の商品</button>
      <button onClick={() => setA(false)}>この出品者の他己評価</button>
      <div>　</div>
      {a ? <UserSellPosts /> : <SelfEsteem />}
      <div>この出品者の他己評価をする</div>
      <textarea name='' id='' cols='30' rows='3'></textarea>
    </>
  )
}

export default User
