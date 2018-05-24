<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GalleryPhotos Controller
 *
 * @property \App\Model\Table\GalleryPhotosTable $GalleryPhotos
 *
 * @method \App\Model\Entity\GalleryPhoto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GalleryPhotosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $galleryPhotos = $this->paginate($this->GalleryPhotos);

        $this->set(compact('galleryPhotos'));
    }

    /**
     * View method
     *
     * @param string|null $id Gallery Photo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $galleryPhoto = $this->GalleryPhotos->get($id, [
            'contain' => []
        ]);

        $this->set('galleryPhoto', $galleryPhoto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $galleryPhoto = $this->GalleryPhotos->newEntity();
        if ($this->request->is('post')) {
            $galleryPhoto = $this->GalleryPhotos->patchEntity($galleryPhoto, $this->request->getData());
            if ($this->GalleryPhotos->save($galleryPhoto)) {
                $this->Flash->success(__('The gallery photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gallery photo could not be saved. Please, try again.'));
        }
        $this->set(compact('galleryPhoto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gallery Photo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $galleryPhoto = $this->GalleryPhotos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $galleryPhoto = $this->GalleryPhotos->patchEntity($galleryPhoto, $this->request->getData());
            if ($this->GalleryPhotos->save($galleryPhoto)) {
                $this->Flash->success(__('The gallery photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gallery photo could not be saved. Please, try again.'));
        }
        $this->set(compact('galleryPhoto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gallery Photo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $galleryPhoto = $this->GalleryPhotos->get($id);
        if ($this->GalleryPhotos->delete($galleryPhoto)) {
            $this->Flash->success(__('The gallery photo has been deleted.'));
        } else {
            $this->Flash->error(__('The gallery photo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
