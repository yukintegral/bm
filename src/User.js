import React, { useState } from 'react'
import { Helmet } from 'react-helmet'
import { Link } from 'react-router-dom'

const courses = ['LAB', 'DEV']

const user = {
  id: 1234,
  displayName: 'ippei',
  course: 0,
  graduatingClass: 8,
  userPhoto:
    'https://avatars2.githubusercontent.com/u/36134103?s=460&u=77193745c8c24b80d994c3407efb1be92697cfd5&v=4',
  selfIntroduction:
    'ご覧いただきありがとうございます。お互いが気持ちの良いお取引をできるよう心がけています。よろしくお願いします。',
  twitterId: 'realDonaldTrump',
  facebookId: 'kazuhira4126',
  githubId: 'kazuhi-ra',
  plant1: 2,
  plant2: 0,
  plant3: 3,
}

const items = [
  {
    id: 1,
    price: 30000,
    itemName: 'あの日の火鍋',
    images: [
      'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228232047.jpg',
      'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228231928.jpg',
    ],
  },
  {
    id: 2,
    price: 3000000,
    itemName: 'あの日の火鍋',
    images: [
      'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228232047.jpg',
      'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228231928.jpg',
    ],
  },
]

const UserSellItems = () => (
  <>
    {items.map(item => (
      <div key={item.id}>
        <Link to={`/items/${item.id}`}>
          <img src={item.images[0]} alt={item.itemName} width='200' />
          <p>{item.itemName}</p>
          <p>￥{item.price.toLocaleString()}</p>
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

const User = () => {
  const [a, setA] = useState(true)

  return (
    <>
      <Helmet>
        <title>闇市 - {user.displayName}</title>
      </Helmet>
      <div>ユーザーの紹介ページです</div>

      <img src={user.userPhoto} alt='ユーザーの写真です' width='100' />
      <p>{user.displayName}</p>
      <p>
        {courses[user.course]}コース {user.graduatingClass}期
      </p>
      <p>{user.selfIntroduction}</p>
      <div>
        <a href={`http://twitter.com/${user.twitterId}`}>twitter</a>
      </div>
      <div>
        <a href={`https://www.facebook.com/${user.facebookId}`}>facebook</a>
      </div>
      <div>
        <a href={`https://github.com/${user.githubId}`}>github</a>
      </div>
      <div>　</div>
      <button onClick={() => setA(true)}>この出品者の商品</button>
      <button onClick={() => setA(false)}>この出品者の他己評価</button>
      <div>　</div>
      {a ? <UserSellItems /> : <SelfEsteem />}
      <div>この出品者の他己評価をする</div>
      <textarea name='' id='' cols='30' rows='3'></textarea>
    </>
  )
}

export default User
