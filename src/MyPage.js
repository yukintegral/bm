import React, { useState } from 'react'
import { Helmet } from 'react-helmet'
import { Link } from 'react-router-dom'

const posts = [
  {
    id: 1,
    price: 30000,
    postName: '取引中の商品です',
    images: [
      'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228232047.jpg',
      'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228231928.jpg',
    ],
  },
]

const post2 = [
  {
    id: 2,
    price: 3000000,
    postName: '過去の取引の商品です',
    images: [
      'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228231928.jpg',
      'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228232047.jpg',
    ],
  },
]

const Trading = () => {
  return (
    <>
      <div>取引中の商品一覧が表示されます</div>
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
}

const Traded = () => {
  return (
    <>
      <div>過去の取引の商品一覧が表示されます</div>
      {post2.map(post => (
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
}

const Favorite = () => {
  return (
    <>
      <div>いいねした商品の一覧が表示されます</div>
      <div>いいねした商品です</div>
      {post2.map(post => (
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
}

const MyPage = () => {
  const [a, setA] = useState(true)

  return (
    <>
      <Helmet>
        <title>MyPage</title>
      </Helmet>
      <div>ユーザー自身のみが見られるマイページです。</div>
      <button onClick={() => setA(true)}>取引中</button>
      <button onClick={() => setA(false)}>過去の取引</button>
      {a ? <Trading /> : <Traded />}
      <Favorite />
    </>
  )
}

export default MyPage
