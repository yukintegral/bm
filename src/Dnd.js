import React, { useCallback, useState } from 'react'

import Dropzone from 'react-dropzone'
import compressImage from './utils/compressImage'

const Dnd = () => {
  const [itemImages, setItemImages] = useState([])
  let i = 0

  const onDrop = useCallback(
    acceptedFiles => {
      if (i >= 3) return
      if (acceptedFiles.length > 3) {
        window.alert('画像は3枚までしかアップロードできません')
        return
      }

      acceptedFiles.map(file => {
        // ファイルをバイナリ文字列に変換するため、FileReader オブジェクトを使用
        const reader = new FileReader()
        reader.readAsDataURL(file)
        reader.onload = e => {
          compressImage(e.target.result).then(result => {
            setItemImages(prevState => [...prevState, result])
          })
          i++
        }
        return file
      })
    },
    [i]
  )

  return (
    <>
      <Dropzone
        accept={'image/*'}
        onDrop={acceptedFiles => onDrop(acceptedFiles)}
      >
        {({ getRootProps, getInputProps }) => (
          <section>
            <div {...getRootProps()}>
              <input {...getInputProps()} />
              <p>
                ドラッグアンドドロップかここをクリックで写真をアップできます。写真は3枚までです。
                <br />
                3枚以上選択するとアラートが出て投稿できません。
                <br />
                形式: png/jpeg/jpg/gif(動きはなく1コマ目だけが抜き出される)
              </p>
            </div>
          </section>
        )}
      </Dropzone>
      {itemImages.map((image, i) => (
        <img key={i} src={image} alt='アップロードした写真' width='200' />
      ))}
    </>
  )
}

export default Dnd
