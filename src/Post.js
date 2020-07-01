import React, { useEffect, useState } from 'react'
import { Helmet } from 'react-helmet'
import { Link } from 'react-router-dom'
import axios from 'axios'

const categories = ['技術書とか', 'PC用品', '洗剤', 'その他']
const conditions = ['未使用', 'ほぼ未使用', '使用感あり']

const Post = ({ match }) => {
  const [post, setPost] = useState({
    images: [],
    post_name: '',
  })

  const paramsId = match.params.id
  const pathName = `posts/${paramsId}`
  const fetchURL = `http://localhost:3001/${pathName}`

  useEffect(() => {
    axios.get(fetchURL).then(response => {
      setPost(response.data)
    })
  }, [fetchURL])

  return (
    <>
      <Helmet>
        <title>闇市 - {post.post_name}</title>
      </Helmet>
      商品をクリックした先の詳細ページです。
      <p>{post.post_name}</p>
      {post.images.map(image => (
        <img src={image} alt='商品の写真' width='200' />
      ))}
      <p>
        出品者: <Link to={`/u/${post.user_id}`}>{post.user_id}</Link>
      </p>
      <p>カテゴリー: {categories[post.category_id]}</p>
      <p>商品の状態: {conditions[post.post_status_id]}</p>
      {/* <p>￥{post.price.toLocaleString()} </p> */}
      <button>購入申請をする</button>
      <p>{post.message}</p>
      <p>いいね: {post.favorite ? '❤️' : '♡'}</p>
    </>
  )
}

export default Post
